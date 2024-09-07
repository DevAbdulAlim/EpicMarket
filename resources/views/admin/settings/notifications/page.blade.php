<x-admin-layout>
    <div class="container mx-auto py-6">
        <!-- Breadcrumb Component -->
        <x-breadcrumb :items="[
            ['name' => 'Dashboard', 'url' => route('admin.index'), 'icon' => 'fa-chart-line'],
            ['name' => 'Settings', 'url' => route('admin.settings.index'), 'icon' => 'fa-cogs'],
            ['name' => 'Notifications', 'url' => route('admin.settings.notifications.edit'), 'icon' => 'fa-bell'],
        ]" />

        <!-- Page Header -->
        <div class="flex justify-between items-center mt-4">
            <h1 class="text-2xl font-semibold text-gray-800">Notification Settings</h1>
        </div>

        <!-- Notification Settings Form -->
        <form action="{{ route('admin.settings.notifications.update') }}" method="POST" class="mt-8 space-y-6">
            @csrf

            <!-- Email Notifications -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Email Notifications</h2>
                <div class="mt-4 space-y-4">
                    <!-- New Order Notification -->
                    <div class="flex items-center">
                        <input id="notify_new_order" name="notify_new_order" type="checkbox"
                            {{ old('notify_new_order', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="notify_new_order" class="ml-2 block text-sm text-gray-900">Notify me on new
                            orders</label>
                    </div>

                    <!-- Low Stock Notification -->
                    <div class="flex items-center">
                        <input id="notify_low_stock" name="notify_low_stock" type="checkbox"
                            {{ old('notify_low_stock', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="notify_low_stock" class="ml-2 block text-sm text-gray-900">Notify me when stock is
                            low</label>
                    </div>

                    <!-- Customer Support Notification -->
                    <div class="flex items-center">
                        <input id="notify_customer_support" name="notify_customer_support" type="checkbox"
                            {{ old('notify_customer_support', true) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="notify_customer_support" class="ml-2 block text-sm text-gray-900">Notify me for new
                            customer support tickets</label>
                    </div>
                </div>
            </div>

            <!-- Push Notifications -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">Push Notifications</h2>
                <div class="mt-4 space-y-4">
                    <!-- Enable Push Notifications -->
                    <div class="flex items-center">
                        <input id="enable_push_notifications" name="enable_push_notifications" type="checkbox"
                            {{ old('enable_push_notifications', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="enable_push_notifications" class="ml-2 block text-sm text-gray-900">Enable Push
                            Notifications</label>
                    </div>

                    <!-- Push Notification Sound -->
                    <div class="flex items-center">
                        <input id="push_notification_sound" name="push_notification_sound" type="checkbox"
                            {{ old('push_notification_sound', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="push_notification_sound" class="ml-2 block text-sm text-gray-900">Enable Sound for
                            Push Notifications</label>
                    </div>
                </div>
            </div>

            <!-- SMS Notifications -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-medium text-gray-900">SMS Notifications</h2>
                <div class="mt-4 space-y-4">
                    <!-- Order Confirmation SMS -->
                    <div class="flex items-center">
                        <input id="notify_order_sms" name="notify_order_sms" type="checkbox"
                            {{ old('notify_order_sms', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="notify_order_sms" class="ml-2 block text-sm text-gray-900">Send SMS for Order
                            Confirmations</label>
                    </div>

                    <!-- Shipping Status SMS -->
                    <div class="flex items-center">
                        <input id="notify_shipping_sms" name="notify_shipping_sms" type="checkbox"
                            {{ old('notify_shipping_sms', false) ? 'checked' : '' }}
                            class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                        <label for="notify_shipping_sms" class="ml-2 block text-sm text-gray-900">Send SMS for Shipping
                            Status Updates</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-primary text-white px-4 py-2 rounded-lg shadow hover:bg-primary-dark focus:outline-none">Save
                    Changes</button>
            </div>
        </form>
    </div>
</x-admin-layout>
