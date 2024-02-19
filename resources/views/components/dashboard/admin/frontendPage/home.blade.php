<section class="py-16 bg-gray-100 dark:bg-gray-800">
    <div class="max-w-6xl px-4 mx-auto">
        <div class="p-6 bg-white border border-gray-100 rounded-lg shadow dark:bg-gray-900 dark:border-gray-900">
            <div class="pb-6 border-b border-gray-100 dark:border-gray-700 ">
                <h2 class="text-xl font-bold text-gray-800 md:text-3xl dark:text-gray-300">
                    Home Page Update
                </h2>
                <p class="text-xs font-medium text-gray-500 mt-2">
                    You can update home page from here
                </p>
            </div>
            <div class="py-6 border-b border-gray-100 dark:border-gray-800">
                <div class="w-full md:w-9/12">
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full p-3 md:w-1/3">
                            <p class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                Title
                            </p>
                        </div>
                        <div class="w-full p-3 md:flex-1">
                                <textarea id="title" rows="2" type="message" placeholder="your text here.." required
                                          class="block w-full px-4 py-4 leading-tight placeholder-gray-400 border rounded dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-800 "></textarea>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full p-3 md:w-1/3">
                            <p class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                Description
                            </p>
                        </div>
                        <div class="w-full p-3 md:flex-1">
                                <textarea id="description" rows="4" type="message" placeholder="your text here.." required
                                          class="block w-full px-4 py-4 leading-tight placeholder-gray-400 border rounded dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-800 "></textarea>
                        </div>
                    </div>
                    <div class="flex flex-wrap -m-3">
                        <div class="w-full p-3 md:w-1/3">
                            <p class="text-base font-semibold text-gray-700 dark:text-gray-400">
                                Embed link
                            </p>
                        </div>
                        <div class="w-full p-3 md:flex-1">
                            <div
                                class="flex items-center overflow-hidden border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-800 focus-within:border-blue-500 shadow-input">
                                <p class="px-4 text-base font-normal text-gray-500">YouTube</p>
                                <input
                                    id="link"
                                    class="w-full px-4 dark:bg-gray-800 dark:placeholder-gray-500 dark:text-gray-400  dark:border-gray-700 py-2.5 text-base text-gray-900 font-normal outline-none border-l"
                                    type="text" placeholder="www.google.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex pt-6 flex-wrap -m-1.5">
                <div class="w-full md:w-auto p-1.5">
                    <button
                        onclick="onCancel()"
                        class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-200 rounded-md dark:text-gray-300 dark:bg-gray-700 dark:hover:bg-gray-800 dark:border-gray-700 hover:border-gray-300 ">
                        <p>Cancel</p>
                    </button>
                </div>
                <div class="w-full md:w-auto p-1.5">
                    <button
                        onclick="onUpdate()"
                        class="flex flex-wrap justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-500 border border-blue-500 rounded-md hover:bg-indigo-600 ">
                        <p>Save</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    getData();
    async function getData(){
        try{
            showLoader();
            let res=await axios.get("/page-home-read");
            hideLoader();

            if(res.status===200){
                document.getElementById('title').value=res.data['title'];
                document.getElementById('description').value=res.data['description'];
                document.getElementById('link').value=res.data['link'];
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
            "title":document.getElementById('title').value,
            "description":document.getElementById('description').value,
            "link":document.getElementById('link').value,
        }

        showLoader();
        let res=await axios.post("/page-home-update",PostBody,HeaderToken());
        hideLoader();

        if(res.data['status']==="success"){
            successToast(res.data['message'])
            await getData();
        }
        else {
            errorToast(res.data['message'])
        }
    }

    async function onCancel(){
        if(confirm("Are you sure to cancel?")){
            await getData();
        }
    }

</script>

