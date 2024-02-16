<div class="container mx-auto pt-3">
    <h1 class="text-2xl font-bold mb-2">All Categories</h1>
    <div class="overflow-x-auto">
        <div class=" text-right">
            <a href="{{ route('admin.blog') }}" class="bg-indigo-500 text-white text-sm font-semibold p-2 rounded">Back to blog</a>
        </div>
        <table class="min-w-full divide-y divide-gray-200 font-[sans-serif]">
            <thead class="bg-gray-100 whitespace-nowrap">
            <tr>
                <th class="px-6 py-3 text-left text-md font-bold text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th class="px-6 py-3 text-left text-md font-bold text-gray-500 uppercase tracking-wider">
                    Created At
                </th>
                <th class="px-6 py-3 text-left text-md font-bold text-gray-500 uppercase tracking-wider">
                    Updated At
                </th>
                <th class="px-6 py-3 text-left text-md font-bold text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 whitespace-nowrap">
            <tr>
                <td class="px-6 py-4 text-sm text-[#333]">
                    Health
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    2022-05-15
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    2022-05-15
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
                    <button class="text-red-500 hover:text-red-700">Delete</button>
                </td>
            </tr>
            <tr>
                <td class="px-6 py-4 text-sm text-[#333]">
                    Foods
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    2022-05-15
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    2022-05-15
                </td>
                <td class="px-6 py-4 text-sm text-[#333]">
                    <button class="text-blue-500 hover:text-blue-700 mr-4">Edit</button>
                    <button class="text-red-500 hover:text-red-700">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
        <div class=" text-left mt-3">
            <button class="bg-indigo-500 text-white text-sm font-semibold p-2 rounded">Load more</button>
        </div>
    </div>

</div>
