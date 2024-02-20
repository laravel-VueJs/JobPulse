<div class="relative font-[sans-serif] before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10">
    <img src="https://readymadeui.com/cardImg.webp" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover" />
    <div class="min-h-[300px] relative z-50 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
        <h2 id="title" class="sm:text-4xl text-2xl font-bold mb-6"></h2>
        <p id="description" class="text-lg text-center text-gray-200"></p>
    </div>
</div>
<script>

    getData();
    async function getData(){
        try{
            showLoader();
            let res=await axios.get("/page-blog-read");
            hideLoader();

            if(res.status===200){
                document.getElementById('title').innerText=res.data['title'];
                document.getElementById('description').innerText=res.data['description'];
                document.getElementById('link').src=res.data['link'];
            }
            else{
                errorToast(res.data['message']);
            }

        }catch (e) {
            unauthorized(e.response.status)
            errorToast(e.response.data.message);
        }
    }

</script>
