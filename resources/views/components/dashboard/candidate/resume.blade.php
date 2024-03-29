<head>
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }
        body {
            margin: 0;
        }
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial,
            sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
        }
        button {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }
        button {
            text-transform: none;
        }
        button {
            -webkit-appearance: button;
        }
        h2,
        p {
            margin: 0;
        }
        button {
            background-color: transparent;
            background-image: none;
        }
        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: inherit;
            line-height: inherit;
        }
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb;
        }
        img {
            border-style: solid;
        }
        button {
            cursor: pointer;
        }
        h2 {
            font-size: inherit;
            font-weight: inherit;
        }
        a {
            color: inherit;
            text-decoration: inherit;
        }
        button {
            padding: 0;
            line-height: inherit;
            color: inherit;
        }
        img,
        svg {
            display: block;
            vertical-align: middle;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .space-y-2 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
        }
        .space-y-4 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
        }
        .space-y-5 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1.25rem * var(--tw-space-y-reverse));
        }
        .space-x-5 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(1.25rem * var(--tw-space-x-reverse));
            margin-left: calc(1.25rem * calc(1 - var(--tw-space-x-reverse)));
        }
        .space-x-8 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(2rem * var(--tw-space-x-reverse));
            margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
        }
        .space-y-1\.5 > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(0.375rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(0.375rem * var(--tw-space-y-reverse));
        }
        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
        }
        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgba(243, 244, 246, var(--tw-bg-opacity));
        }
        .bg-gray-400 {
            --tw-bg-opacity: 1;
            background-color: rgba(156, 163, 175, var(--tw-bg-opacity));
        }
        .bg-cover {
            background-size: cover;
        }
        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgba(229, 231, 235, var(--tw-border-opacity));
        }
        .rounded-xl {
            border-radius: 0.75rem;
        }
        .border-t {
            border-top-width: 1px;
        }
        .border-b {
            border-bottom-width: 1px;
        }
        .flex {
            display: flex;
        }
        .flow-root {
            display: flow-root;
        }
        .grid {
            display: grid;
        }
        .flex-col {
            flex-direction: column;
        }
        .flex-wrap {
            flex-wrap: wrap;
        }
        .items-end {
            align-items: flex-end;
        }
        .justify-between {
            justify-content: space-between;
        }
        .flex-shrink-0 {
            flex-shrink: 0;
        }
        .font-medium {
            font-weight: 500;
        }
        .font-semibold {
            font-weight: 600;
        }
        .h-4 {
            height: 1rem;
        }
        .h-6 {
            height: 1.5rem;
        }
        .h-12 {
            height: 3rem;
        }
        .h-32 {
            height: 8rem;
        }
        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem;
        }
        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }
        .-m-2 {
            margin: -0.5rem;
        }
        .my-5 {
            margin-top: 1.25rem;
            margin-bottom: 1.25rem;
        }
        .mb-5 {
            margin-bottom: 1.25rem;
        }
        .mb-7 {
            margin-bottom: 1.75rem;
        }
        .mb-1\.5 {
            margin-bottom: 0.375rem;
        }
        .overflow-hidden {
            overflow: hidden;
        }
        .p-7 {
            padding: 1.75rem;
        }
        .pb-0 {
            padding-bottom: 0px;
        }
        .pt-14 {
            padding-top: 3.5rem;
        }
        .relative {
            position: relative;
        }
        * {
            --tw-shadow: 0 0 #0000;
        }
        .shadow {
            --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        * {
            --tw-ring-inset: var(--tw-empty);
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
        }
        .text-right {
            text-align: right;
        }
        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgba(156, 163, 175, var(--tw-text-opacity));
        }
        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgba(75, 85, 99, var(--tw-text-opacity));
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .w-4 {
            width: 1rem;
        }
        .w-6 {
            width: 1.5rem;
        }
        .w-12 {
            width: 3rem;
        }
        .w-full {
            width: 100%;
        }
        .gap-5 {
            gap: 1.25rem;
        }
        .main-container {
            width: 100%;
        }
        @media (min-width: 640px) {
            .main-container {
                max-width: 640px;
            }
        }
        @media (min-width: 768px) {
            .main-container {
                max-width: 768px;
            }
        }
        @media (min-width: 1024px) {
            .main-container {
                max-width: 1024px;
            }
        }
        @media (min-width: 1280px) {
            .main-container {
                max-width: 1280px;
            }
        }
        @media (min-width: 1536px) {
            .main-container {
                max-width: 1536px;
            }
        }
        .main-container {
            margin-left: auto;
            margin-right: auto;
            max-width: 64rem;
            padding: 1rem;
        }
        @media (min-width: 640px) {
            .main-container {
                padding: 1.25rem;
            }
        }
        .block-section {
            --tw-bg-opacity: 1;
            background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
            border-radius: 0.75rem;
            --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .block-title {
            font-weight: 600;
            font-size: 1.125rem;
            line-height: 1.75rem;
            margin-bottom: 1.25rem;
        }
        .item-section > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
        }
        @media (min-width: 640px) {
            .item-section > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px * var(--tw-space-y-reverse));
                --tw-space-x-reverse: 0;
                margin-right: calc(1rem * var(--tw-space-x-reverse));
                margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
            }
            .item-section {
                display: flex;
                align-items: flex-start;
            }
        }
        .item-header-info > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.375rem * var(--tw-space-x-reverse));
            margin-left: calc(0.375rem * calc(1 - var(--tw-space-x-reverse)));
        }
        .item-header-info {
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.25rem;
            --tw-text-opacity: 1;
            color: rgba(156, 163, 175, var(--tw-text-opacity));
        }
        .item-header > :not([hidden]) ~ :not([hidden]) {
            --tw-space-y-reverse: 0;
            margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom: calc(1rem * var(--tw-space-y-reverse));
        }
        @media (min-width: 640px) {
            .item-header > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0px * var(--tw-space-y-reverse));
            }
            .item-header {
                display: flex;
                justify-content: space-between;
            }
        }
        .user-photo {
            --tw-border-opacity: 1;
            border-color: rgba(255, 255, 255, var(--tw-border-opacity));
            border-radius: 0.75rem;
            border-width: 2px;
            height: 5rem;
            position: absolute;
            top: -2.5rem;
            --tw-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            width: 5rem;
        }
        .status-badge {
            border-radius: 9999px;
            font-weight: 600;
            font-size: 0.75rem;
            line-height: 1rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            padding-top: 0.125rem;
            padding-bottom: 0.125rem;
            position: absolute;
            top: 1rem;
            right: 1.75rem;
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
            text-transform: uppercase;
        }
        .download-btn {
            --tw-bg-opacity: 1;
            background-color: rgba(139, 92, 246, var(--tw-bg-opacity));
        }
        .group:hover .download-btn {
            --tw-bg-opacity: 1;
            background-color: rgba(124, 58, 237, var(--tw-bg-opacity));
        }
        .download-btn {
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.5rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
            width: 100%;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter,
            -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            transition-duration: 200ms;
        }
        .download-btn-icon {
            --tw-bg-opacity: 1;
            background-color: rgba(124, 58, 237, var(--tw-bg-opacity));
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }
        .skill-tag {
            --tw-bg-opacity: 1;
            background-color: rgba(237, 233, 254, var(--tw-bg-opacity));
            border-radius: 0.5rem;
            font-weight: 500;
            font-size: 0.875rem;
            line-height: 1.25rem;
            margin: 0.25rem;
            padding-left: 1rem;
            padding-right: 1rem;
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
            --tw-text-opacity: 1;
            color: rgba(139, 92, 246, var(--tw-text-opacity));
        }
        .mail-link > :not([hidden]) ~ :not([hidden]) {
            --tw-space-x-reverse: 0;
            margin-right: calc(0.25rem * var(--tw-space-x-reverse));
            margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
        }
        .mail-link {
            display: flex;
            align-items: center;
            font-weight: 500;
            --tw-text-opacity: 1;
            color: rgba(139, 92, 246, var(--tw-text-opacity));
        }
        .social-link-hover:hover {
            --tw-text-opacity: 1;
            color: rgba(124, 58, 237, var(--tw-text-opacity));
        }
        .social-link-hover {
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter,
            -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            transition-duration: 300ms;
        }
        .menu-link {
            border-color: transparent;
            border-bottom-width: 2px;
            display: inline-flex;
            padding-bottom: 1.25rem;
        }
        .menu-link-active {
            --tw-border-opacity: 1;
            border-color: rgba(139, 92, 246, var(--tw-border-opacity));
            border-bottom-width: 2px;
            display: inline-flex;
            padding-bottom: 1.25rem;
            --tw-text-opacity: 1;
            color: rgba(139, 92, 246, var(--tw-text-opacity));
        }
        .menu-link-hover:hover {
            --tw-border-opacity: 1;
            border-color: rgba(124, 58, 237, var(--tw-border-opacity));
            --tw-text-opacity: 1;
            color: rgba(124, 58, 237, var(--tw-text-opacity));
        }
        .menu-link-hover {
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: background-color, border-color, color, fill, stroke,
            opacity, box-shadow, transform, filter, backdrop-filter,
            -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
            transition-duration: 300ms;
        }
        .company-logo {
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            height: 3rem;
            --tw-text-opacity: 1;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
            width: 3rem;
        }
        .job-item-badge {
            --tw-bg-opacity: 1;
            background-color: rgba(237, 233, 254, var(--tw-bg-opacity));
            border-radius: 0.5rem;
            display: inline-flex;
            font-weight: 500;
            font-size: 0.75rem;
            line-height: 1rem;
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            padding-top: 0.125rem;
            padding-bottom: 0.125rem;
            --tw-text-opacity: 1;
            color: rgba(139, 92, 246, var(--tw-text-opacity));
            text-transform: capitalize;
        }
        @media (min-width: 640px) {
            .sm\:text-right {
                text-align: right;
            }
        }
        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .lg\:col-span-2 {
                grid-column: span 2 / span 2;
            }
        }
        /*! CSS Used from: https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css */
        .bx {
            font-family: "boxicons" !important;
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            display: inline-block;
            text-transform: none;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .bx-at:before {
            content: "\e920";
        }
        .bxl-blogger:before {
            content: "\ee6c";
        }
        .bxl-dropbox:before {
            content: "\ee7c";
        }
        .bxl-facebook-circle:before {
            content: "\ee82";
        }
        .bxl-github:before {
            content: "\ee8b";
        }
        .bxl-twitter:before {
            content: "\eecc";
        }
        /*! CSS Used fontfaces */
        @font-face {
            font-family: "boxicons";
            font-weight: normal;
            font-style: normal;
            src: url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.eot");
            src: url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.eot")
            format("embedded-opentype"),
            url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.woff2") format("woff2"),
            url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.woff") format("woff"),
            url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.ttf")
            format("truetype"),
            url("https://unpkg.com/boxicons@2.0.7/fonts/boxicons.svg?#boxicons")
            format("svg");
        }

    </style>
</head>
<body class="bg-gray-100 antialiased" data-new-gr-c-s-check-loaded="14.1110.0" data-gr-ext-installed="">
<main class="main-container">
    <div class="grid gap-5 lg:grid-cols-3">

        <div class="space-y-5">
            <!-- Start Left Side -->

            <div class="shadow rounded-xl overflow-hidden">
                <!-- Start User Block -->
                <div class="h-32 bg-cover" style="background-image: url('https://images.pexels.com/photos/20360845/pexels-photo-20360845/free-photo-of-a-white-tree-with-blue-sky-in-the-background.jpeg');"></div>
                <div class="pt-14 p-7 bg-white relative">
                    <span class="status-badge bg-gray-400">Available</span>
                    <a href="/personal_cv/"><img src="https://vue-resume-six.vercel.app/assets/me.0a9453a5.jpg" alt="Avatar" class="user-photo"></a>
                    <div class="text-lg font-semibold mb-1.5">Next Dev IT</div>
                    <div class="text-sm text-gray-400 mb-7">Senior Developer</div>
                    <div class="flex group">
                        <button class="download-btn">Download CV</button>
                        <button class="download-btn-icon"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg></button>
                    </div>
                </div>
            </div><!-- End User Block -->

            <div class="p-7 block-section">
                <!-- Start Info Block -->
                <h2 class="block-title">Information</h2>
                <div class="space-y-4">
                    <div class="flex justify-between">
                        <div class="text-gray-400">Location</div>
                        <div class="font-medium text-right text-gray-600">Dhaka, Bangladesh</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-400">Experience</div>
                        <div class="font-medium text-right text-gray-600">8+ years</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-400">Availability</div>
                        <div class="font-medium text-right text-gray-600">1 week</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-400">Current Salary</div>
                        <div class="font-medium text-right text-gray-600">70,000 BDT</div>
                    </div>
                    <div class="flex justify-between">
                        <div class="text-gray-400">Expected Salary</div>
                        <div class="font-medium text-right text-gray-600">90,000 BDT</div>
                    </div>
                </div>
            </div><!-- End Info Block -->

            <div class="p-7 block-section flow-root">
                <!-- Start Skills Block -->
                <h2 class="block-title">Skills</h2>
                <div class="-m-2 flex flex-wrap">
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">Vue</span>
                    <span class="skill-tag">SQL</span>
                    <span class="skill-tag">HTML/CSS</span>
                    <span class="skill-tag">TailwindCSS</span>
                    <span class="skill-tag">WordPress</span>
                </div>
            </div><!-- End Skills Block -->

        </div><!-- End Left Side -->

        <div class="space-y-5 lg:col-span-2">
            <!-- Start Right Side -->

            <div class="p-7 pb-0 block-section">
                <!-- Start About Me Block -->
                <h2 class="block-title">About me</h2>
                <p class="text-gray-600 mb-5">Libero quas veritatis nulla distinctio fuga nihil temporibus et. Quia dicta sapiente qui porro molestiae nobis incidunt voluptatem. Et voluptas sunt nihil. At perferendis voluptatem dolores nulla. Adipisci dolore non. Praesentium ipsa magnam ut quia explicabo voluptates.</p>

                <!-- Start Personal Info Block -->
                <div class="w-full grid grid-cols-1 md:grid-cols-2 md:space-x-10 mb-10">
                    <div class="">
                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Father Name</div>
                                <div class="font-medium text-right text-gray-600">Abu Bokkor</div>
                            </div>
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Mother Name</div>
                                <div class="font-medium text-right text-gray-600">Komela Begum</div>
                            </div>
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Gender</div>
                                <div class="font-medium text-right text-gray-600">Male</div>
                            </div>
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Date of Birth</div>
                                <div class="font-medium text-right text-gray-600">02 March 1990</div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="space-y-4">
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Blood Group</div>
                                <div class="font-medium text-right text-gray-600">AB+</div>
                            </div>
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Gov ID</div>
                                <div class="font-medium text-right text-gray-600">983093837</div>
                            </div>
                            <div class="flex justify-between border-b pb-4">
                                <div class="text-gray-400">Emergency Number</div>
                                <div class="font-medium text-right text-gray-600">01873636283</div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Personal Info Block -->

                <div class="flex flex-col space-y-4">
                    <a href="mailto:masummolla.cse@gmail.com" class="mail-link social-link-hover">
                        <i class="bx bx-at text-xl"></i>
                        <span>contact@nextdevit.com</span>
                    </a>

                    <ul class="flex space-x-5">
                        <li>
                            <a href="#0" class="social-link-hover">
                                <i class="bx bxl-facebook-circle text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="social-link-hover">
                                <i class="bx bxl-twitter text-2xl"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="social-link-hover">
                                <i class="bx bxl-github text-2xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="border-t border-gray-200 my-5"></div>

                <!--
                <ul class="flex space-x-8 font-medium">
                    <li>
                        <a href="" class="menu-link-active menu-link-hover">Resume</a>
                    </li>
                    <li>
                        <a href="" class="menu-link menu-link-hover">Products</a>
                    </li>
                    <li>
                        <a href="" class="menu-link menu-link-hover">Blog</a>
                    </li>
                </ul>
                -->
            </div><!-- End About Me Block -->

            <div class="p-7 block-section">
                <!-- Start Experience Block -->
                <h2 class="block-title">Experience</h2>
                <div class="mb-5 item-section">
                    <div class="company-logo" style="background-color: #1DA1F2;">
                        <i class="bx bxl-twitter text-3xl"></i>
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header">
                            <div class="space-y-1.5">
                                <div class="font-medium">Senior Developer</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Twitter</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 sm:text-right">
                                <div class="job-item-badge">Full time</div>
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>June 2019 – Present</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            Aut omnis voluptatem sit sequi. Voluptatem temporibus repellat voluptatem voluptatibus enim voluptas necessitatibus. Aut quasi sunt dolor. Commodi dolores saepe asperiores beatae voluptate corporis est ea voluptatem. Enim quo sed et sint aspernatur distinctio qui quam.
                        </p>
                        <div class="border-b border-gray-200"></div>
                    </div>
                </div>

                <div class="mb-5 item-section">
                    <div class="company-logo" style="background-color: #0061FF;">
                        <i class="bx bxl-dropbox text-3xl"></i>
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header">
                            <div class="space-y-1.5">
                                <div class="font-medium">Middle Developer</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Dropbox</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 sm:text-right">
                                <div class="job-item-badge">Full time</div>
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>April 2018 – June 2019</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            Aut omnis voluptatem sit sequi. Voluptatem temporibus repellat voluptatem voluptatibus enim voluptas necessitatibus. Aut quasi sunt dolor. Commodi dolores saepe asperiores beatae voluptate corporis est ea voluptatem. Enim quo sed et sint aspernatur distinctio qui quam.
                        </p>
                        <div class="border-b border-gray-200"></div>
                    </div>
                </div>

                <div class="item-section">
                    <div class="company-logo" style="background-color: #FC4F08;">
                        <i class="bx bxl-blogger text-3xl"></i>
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header">
                            <div class="space-y-1.5">
                                <div class="font-medium">Junior Developer</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        <span>Blogger</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2 sm:text-right">
                                <div class="job-item-badge">Full time</div>
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>December 2017 – March 2018</span>
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            Aut omnis voluptatem sit sequi. Voluptatem temporibus repellat voluptatem voluptatibus enim voluptas necessitatibus. Aut quasi sunt dolor. Commodi dolores saepe asperiores beatae voluptate corporis est ea voluptatem. Enim quo sed et sint aspernatur distinctio qui quam.
                        </p>
                    </div>
                </div>
            </div><!-- End Experience Block -->

            <div class="p-7 block-section">
                <!-- Start Education Block -->
                <h2 class="block-title">Education</h2>
                <div class="mb-5 item-section">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-cover" style="background-image: url('assets/img/bu-logo.jpg');">
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header items-end">
                            <div class="space-y-1.5">
                                <div class="font-medium">Master in Software Engineering</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                                        </svg>
                                        <span>Brunel University</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-1.5 sm:text-right">
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>September 2017 – May 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-200"></div>
                    </div>
                </div>

                <div class="item-section">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-cover" style="background-image: url('assets/img/bu-logo.jpg');">
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header items-end">
                            <div class="space-y-1.5">
                                <div class="font-medium">Master in Software Engineering</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                                        </svg>
                                        <span>Brunel University</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-1.5 sm:text-right">
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>September 2013 – May 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Education Block -->

            <div class="p-7 block-section">
                <!-- Start Training Block -->
                <h2 class="block-title">Training</h2>
                <div class="mb-5 item-section">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-cover" style="background-image: url('assets/img/bu-logo.jpg');">
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header items-end">
                            <div class="space-y-1.5">
                                <div class="font-medium">PHP Basic to Advance</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                                        </svg>
                                        <span>USA University</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-1.5 sm:text-right">
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>September 2017 – May 2019</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-gray-200"></div>
                    </div>
                </div>

                <div class="item-section">
                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-cover" style="background-image: url('assets/img/bu-logo.jpg');">
                    </div>

                    <div class="w-full space-y-5">
                        <div class="item-header items-end">
                            <div class="space-y-1.5">
                                <div class="font-medium">Mastering Laravel and VueJS</div>
                                <div class="flex space-x-5">
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                                        </svg>
                                        <span>Brunel University</span>
                                    </div>
                                    <div class="item-header-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>London</span>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-1.5 sm:text-right">
                                <div class="item-header-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span>September 2013 – May 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Training Block -->

        </div><!-- End Right Side -->

    </div>
</main>

<script>

    getProfileInfo();
    async function getProfileInfo(){
        try{
            showLoader();
            let res= await axios.get("/candidate-profile-info");
            hideLoader();

            document.getElementById('firstName').innerText = res.data.name;

        }catch (e) {
            unauthorized(e.response.status)
            errorToast(e.response.data.message);
        }
    }

</script>

</body>
