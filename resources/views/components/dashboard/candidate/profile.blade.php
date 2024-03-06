<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-10 mx-auto">
    <div class="flex justify-end">
        <a href="" class=" rounded-lg mr-2 border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Preview CV</a>
        <a href="{{ route('candidate.dashboard.account') }}" class=" rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Account</a>
    </div>
    <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
        <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="font-medium text-xl">Profile Details</p>
                <p class="text-sm text-gray-600">Basic Demographic Information</p>
            </div>
            <button class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
            <button class="hidden rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Save</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mb-5 border-b py-4">
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full name</label>
                <input type="text" id="" placeholder="Jon Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father Name</label>
                <input type="text" id="" placeholder="David Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother Name</label>
                <input type="text" id="" placeholder="Joly Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
                <input type="date" id="" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="male">Female</option>
                    <option value="male">Other</option>
                </select>
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Group</label>
                <input type="text" id="" placeholder="AB+" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Government ID</label>
                <input type="number" id="" placeholder="03937262834" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emergency Number</label>
                <input type="number" id="" placeholder="01873638393" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea id="" placeholder="House 12, Road 13, Sector 10, Uttara, Dhaka" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                </textarea>
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
                <textarea id="" placeholder="Bio" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                </textarea>
            </div>
        </div>

    </div>

</div>

