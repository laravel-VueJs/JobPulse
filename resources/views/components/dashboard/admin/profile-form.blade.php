<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-10 mx-auto">
    <!-- Grid -->
    <div class="grid md:grid-cols-1 items-center gap-12">

        <div class="relative">
            <!-- Card -->
            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    Profile
                </h2>

                <div>
                    <div class="mt-4 grid gap-4 lg:gap-6">
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                            <div>
                                <label for="email" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Email</label>
                                <input type="email" id="email" autocomplete="email" readonly class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                            <div>
                                <label for="firstName" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">First Name</label>
                                <input type="text" name="firstName" id="firstName" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                            <div>
                                <label for="lastName" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Last Name</label>
                                <input type="text" name="lastName" id="lastName" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                            <div>
                                <label for="mobile" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Mobile Number</label>
                                <input type="number" id="mobile" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Grid -->

                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
                        <button onclick="onUpdate()" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Update</button>
                    </div>
                </div>

            </div>
            <!-- End Card -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>


<script>

    getProfile();
    async function getProfile(){
        try{
            showLoader();
            let res=await axios.get("/user-profile",HeaderToken());
            hideLoader();

            if(res.status===200){
                document.getElementById('email').value=res.data['email'];
                document.getElementById('firstName').value=res.data['firstName'];
                document.getElementById('lastName').value=res.data['lastName'];
                document.getElementById('mobile').value=res.data['mobile'];
            }
            else{
                errorToast(res.data['message']);
            }

        }catch (e) {
            unauthorized(e.response.status)
            errorToast(e.response.data.message);
        }
    }


    async function onUpdate(){
        let PostBody={
            "firstName":document.getElementById('firstName').value,
            "lastName":document.getElementById('lastName').value,
            "mobile":document.getElementById('mobile').value,
        }

        showLoader();
        let res=await axios.post("/user-update",PostBody,HeaderToken());
        hideLoader();

        if(res.data['status']==="success"){
            successToast(res.data['message'])
            await getProfile();
        }
        else {
            errorToast(res.data['message'])
        }
    }

</script>
