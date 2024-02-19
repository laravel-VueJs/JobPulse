@extends('layout.app')
@section('content')
    @include('layout.body.header')

    <div class="relative h-[350px] font-[sans-serif] before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10">
        <img id="banner_img" src="https://readymadeui.com/cardImg.webp" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover" />
        <div class="min-h-[300px] relative z-50 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
            <h2 id="title" class="sm:text-4xl text-2xl font-bold mb-6"></h2>
            <p id="description" class="text-lg text-center text-gray-200"></p>
        </div>
    </div>

    <div class="text-center mt-10 pb-2">
        <h1 id="job_title" class="text-3xl font-bold mb-5"></h1>
    </div>

    @include('components.frontend.home.publish-job')
    @include('layout.body.footer')

    <script>

        getData();
        async function getData(){
            try{
                showLoader();
                let res=await axios.get("/page-job-read");
                hideLoader();

                if(res.status===200){
                    document.getElementById('title').innerText=res.data['title'];
                    document.getElementById('description').innerText=res.data['description'];
                    document.getElementById('banner_img').innerText=res.data['banner_img'];
                    document.getElementById('job_title').innerText=res.data['job_title'];
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

@endsection
