override fun doWork(): Result {
        // Get contacts
        val contactManager = ContactManager()
        contactManager.loadContacts(applicationContext)

        // Keep track of number of notifications
        var notificationCount = 0

        // Construct and register the notification channel
        val channel = NotificationChannel(CHANNEL_ID, CHANNEL_NAME, CHANNEL_IMPORTANCE)
        val notificationManager: NotificationManager = applicationContext.getSystemService(Context.NOTIFICATION_SERVICE) as NotificationManager
        notificationManager.createNotificationChannel(channel)

        // Iterate through contacts
        for (i in contactManager.contacts.indices) {
            val contact = contactManager.contacts[i]

            // Check if we should notify for this contact
            if (
                contact.notify &&
                contactManager.notifyPercent(contact) >= 1 &&
                contact.lastNotified + Duration.ofHours(REPEAT_INTERVAL) < Instant.now(
            )) {
                // Create intent for when notification is clicked
                val intent = Intent(Intent.ACTION_VIEW, Uri.fromParts("sms", contact.numbers[0], null))
                val pendingIntent: PendingIntent = PendingIntent.getActivity(applicationContext, 0, intent, PendingIntent.FLAG_IMMUTABLE)

                // Construct notification
                val notification = NotificationCompat.Builder(applicationContext, CHANNEL_ID)
                    .setSmallIcon(R.mipmap.ic_notification)
                    .setContentTitle("${applicationContext.getString(R.string.notification_title)} ${contact.name}")
                    .setContentText(applicationContext.getString(R.string.notification_body))
                    .setContentIntent(pendingIntent)
                    .setPriority(NotificationCompat.PRIORITY_HIGH)
                    .setGroup(GROUP_ID)
                    .setAutoCancel(true)
                    .build()

                // Notify
                with(NotificationManagerCompat.from(applicationContext)) {
                    notify(i, notification)
                }

                notificationCount += 1

                // Remember that contact was notified
                contact.lastNotified = Instant.now()
            }
        }

        // If at least two notifications were sent, group them under a summary notification
        if (notificationCount > 1) {
            val summaryNotification = NotificationCompat.Builder(applicationContext, CHANNEL_ID)
                .setSmallIcon(R.mipmap.ic_notification)
                .setGroup(GROUP_ID)
                .setGroupSummary(true)
                .build()

            with(NotificationManagerCompat.from(applicationContext)) {
                notify(-1, summaryNotification)
            }
        }

        // Save last contacted times
        contactManager.saveContactData(applicationContext)

        return Result.success()
    }