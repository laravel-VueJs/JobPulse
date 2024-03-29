<div class="w-full max-w-md mx-auto p-6">
    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Set new password</h1>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <div class="grid gap-y-4">
                    <!-- Form Group -->
                    <div>
                        <label for="password" class="block text-sm mb-2 dark:text-white">New Password</label>
                        <div class="relative">
                            <input type="password" id="password" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div>
                        <label for="cpassword" class="block text-sm mb-2 dark:text-white">Confirm Password</label>
                        <div class="relative">
                            <input type="password" id="cpassword" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-indigo-500 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <button onclick="ResetPass()" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Change Password</button>
                </div>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>

<script>
    async function ResetPass() {
        let postBody={"password":document.getElementById('password').value}

        if(postBody.password.length===0){
            errorToast("Password is required");
            return;
        }
        else if(postBody.password!==document.getElementById('cpassword').value){
            errorToast("Password and Confirm Password not matched");
            return;
        }

        showLoader();
        let res=await axios.post("/reset-password",postBody,HeaderToken());
        hideLoader();

        if(res.status===200 && res.data['status']==='success'){
            successToast("Password changed successfully");
            setTimeout(() => {
                window.location.href = '/login';
            }, 1000);
        }
        else{
            errorToast(res.data['message']);
        }
    }
</script>
