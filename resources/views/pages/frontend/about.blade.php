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

    <div class="container mx-auto py-10 px-5 lg:px-2">
        <div>
            <h1 class="text-2xl mb-2">Company History</h1>
            <p id="company_history"></p>
        </div>
        <div class="mt-14">
            <h1 class="text-2xl mb-2">Our vision</h1>
            <p id="our_vision"></p>
        </div>
    </div>

    <div class="text-center mt-10 pb-2">
        <h1 class="text-3xl font-bold mb-5">Companies believe in us</h1>
    </div>

    @include('components.frontend.home.top-company')
    @include('layout.body.footer')

    <script>

        getData();
        async function getData(){
            try{
                showLoader();
                let res=await axios.get("/page-about-read");
                hideLoader();

                if(res.status===200){
                    document.getElementById('title').innerText=res.data['title'];
                    document.getElementById('description').innerText=res.data['description'];
                    document.getElementById('banner_img').innerText=res.data['banner_img'];
                    document.getElementById('company_history').innerText=res.data['company_history'];
                    document.getElementById('our_vision').innerText=res.data['our_vision'];
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


