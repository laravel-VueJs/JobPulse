<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-10 mx-auto">
    <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
        <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="font-medium">Account Details</p>
                <p class="text-sm text-gray-600">Edit your account details</p>
            </div>
            <button onclick="onCancelAccount()" class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
            <button onclick="onUpdateAccount()" class="hidden rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Save</button>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 border-b py-4">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" readonly placeholder="Jon Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                <input type="text" id="firstName" placeholder="David Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="lastName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                <input type="text" id="lastName" placeholder="Joly Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="mobile" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number</label>
                <input type="number" id="mobile" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mb-5 border-b py-4">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Password</label>
                <input type="password" id="email" readonly class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="firstName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                <input type="password" id="firstName" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
        </div>

        <div class="flex flex-col gap-4 py-4  lg:flex-row">
            <div class="shrink-0 w-32  sm:py-4">
                <p class="mb-auto font-medium">Avatar</p>
                <p class="text-sm text-gray-600">Change your avatar</p>
            </div>
            <div class="flex h-56 w-full flex-col items-center justify-center gap-4 rounded-xl border border-dashed border-gray-300 p-5 text-center">
                <img src="https://componentland.com/images/ddHJYlQqOzyOKm4CSCY8o.png" class="h-16 w-16 rounded-full" alt="Img">
                <p class="text-sm text-gray-600">Drop your desired image file here to start the upload</p>
                <input type="file" class="max-w-full rounded-lg px-2 pb-5 font-medium text-blue-600 outline-none ring-blue-600 focus:ring-1">
            </div>
        </div>
        <div class="flex justify-end py-4 sm:hidden">
            <button class="mr-2 rounded-lg border-2 px-4 py-2 font-medium text-gray-500 focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
            <button class="rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white focus:outline-none focus:ring hover:bg-blue-700">Save</button>
        </div>
    </div>

</div>


<script>

    getProfileAccount();
    async function getProfileAccount(){
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


    async function onUpdateAccount(){
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
            await getProfileAccount();
        }
        else {
            errorToast(res.data['message'])
        }
    }

    async function onCancelAccount(){
        if(confirm("Are you sure to cancel?")){
            await getProfileAccount();
        }
    }

</script>
