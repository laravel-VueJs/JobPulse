<div class="max-w-[85rem] px-4 py-4 sm:px-6 lg:px-8 lg:py-10 mx-auto">
    <div class="flex justify-end">
        <a href="{{ route('candidate.dashboard.resume') }}" target="_blank" class=" rounded-lg mr-2 border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Preview CV</a>
        <a href="{{ route('candidate.dashboard.account') }}" class=" rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Account</a>
    </div>
    <div class="my-4 max-w-screen-md border px-4 shadow-xl sm:mx-4 sm:rounded-xl sm:px-4 sm:py-4 md:mx-auto">
        <div class="flex flex-col border-b py-4 sm:flex-row sm:items-start">
            <div class="shrink-0 mr-auto sm:py-3">
                <p class="font-medium text-xl">Profile Details</p>
                <p class="text-sm text-gray-600">Basic Demographic Information</p>
            </div>
            <button onclick="onCancelCandidateProfile()" class="mr-2 hidden rounded-lg border-2 px-4 py-2 font-medium text-gray-500 sm:inline focus:outline-none focus:ring hover:bg-gray-200">Cancel</button>
            <button onclick="onUpdateCandidateProfile()" class="hidden rounded-lg border-2 border-transparent bg-blue-600 px-4 py-2 font-medium text-white sm:inline focus:outline-none focus:ring hover:bg-blue-700">Save</button>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 mb-5 border-b py-4">
            <div>
                <label for="father_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father Name</label>
                <input type="text" id="father_name" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="mother_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother Name</label>
                <input type="text" id="mother_name" placeholder="Joly Deo" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of birth</label>
                <input type="date" id="date_of_birth" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                <select id="gender" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                    <option value="">Select</option>
                    <option value="">Male</option>
                </select>

            </div>
            <div>
                <label for="blood_group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Group</label>
                <input type="text" id="blood_group" placeholder="AB+" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="gov_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Government ID</label>
                <input type="number" id="gov_id" placeholder="03937262834" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="emergency_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emergency Number</label>
                <input type="number" id="emergency_phone" placeholder="01873638393" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1" />
            </div>
            <div>
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <textarea id="address" placeholder="House 12, Road 13, Sector 10, Uttara, Dhaka" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                </textarea>
            </div>
            <div>
                <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
                <textarea id="bio" placeholder="Bio" class="mb-2 w-full rounded-md border bg-white px-2 py-2 outline-none ring-blue-600 sm:mr-4 sm:mb-0 focus:ring-1">
                </textarea>
            </div>
        </div>

    </div>

</div>

<script>

    getCandidateProfile();
    async function getCandidateProfile(){
        try{
            showLoader();
            let res=await axios.get("/candidate-profile",HeaderToken());
            hideLoader();

            if(res.status===200){
                document.getElementById('father_name').value=res.data['father_name'];
                document.getElementById('mother_name').value=res.data['mother_name'];
                document.getElementById('date_of_birth').value=res.data['date_of_birth'];
                document.getElementById('gender').value=res.data['gender'];
                document.getElementById('blood_group').value=res.data['blood_group'];
                document.getElementById('gov_id').value=res.data['gov_id'];
                document.getElementById('emergency_phone').value=res.data['emergency_phone'];
                document.getElementById('address').value=res.data['address'];
                document.getElementById('bio').value=res.data['bio'];
            }
            else{
                errorToast(res.data['message']);
            }

        }catch (e) {
            unauthorized(e.response.status)
            errorToast(e.response.data.message);
        }
    }


    async function onUpdateCandidateProfile(){
        let PostBody={
            "father_name":document.getElementById('father_name').value,
            "mother_name":document.getElementById('mother_name').value,
            "date_of_birth":document.getElementById('date_of_birth').value,
            "gender":document.getElementById('gender').value,
            "blood_group":document.getElementById('blood_group').value,
            "gov_id":document.getElementById('gov_id').value,
            "emergency_phone":document.getElementById('emergency_phone').value,
            "address":document.getElementById('address').value,
            "bio":document.getElementById('bio').value
        }

        showLoader();
        let res=await axios.post("/candidate-profile-create-update",PostBody,HeaderToken());
        hideLoader();

        if(res.data['status']==="success"){
            successToast(res.data['message'])
            await getCandidateProfile();
        }
        else {
            errorToast(res.data['message'])
        }
    }


    async function onCancelCandidateProfile(){
        if(confirm("Are you sure to cancel?")){
            await getCandidateProfile();
        }
    }

</script>

