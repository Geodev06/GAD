 <script src="https://cdn.tailwindcss.com"></script>

 <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

 <style>
     .avatar {
         height: 50px;
         width: 50px;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 10px;
         border-radius: 100%;
         background-color: crimson;
         color: white;
     }
 </style>
 <script>
     tailwind.config = {
         darkMode: 'class',
         theme: {
             extend: {
                 colors: {
                     primary: {
                         "50": "#fff1f2",
                         "100": "#ffe4e6",
                         "200": "#fecdd3",
                         "300": "#fda4af",
                         "400": "#fb7185",
                         "500": "#f43f5e",
                         "600": "#e11d48",
                         "700": "#be123c",
                         "800": "#9f1239",
                         "900": "#881337",
                         "950": "#4c0519"
                     }
                 }
             },
             fontFamily: {
                 'body': [
                     'Inter',
                     'ui-sans-serif',
                     'system-ui',
                     '-apple-system',
                     'system-ui',
                     'Segoe UI',
                     'Roboto',
                     'Helvetica Neue',
                     'Arial',
                     'Noto Sans',
                     'sans-serif',
                     'Apple Color Emoji',
                     'Segoe UI Emoji',
                     'Segoe UI Symbol',
                     'Noto Color Emoji'
                 ],
                 'sans': [
                     'Inter',
                     'ui-sans-serif',
                     'system-ui',
                     '-apple-system',
                     'system-ui',
                     'Segoe UI',
                     'Roboto',
                     'Helvetica Neue',
                     'Arial',
                     'Noto Sans',
                     'sans-serif',
                     'Apple Color Emoji',
                     'Segoe UI Emoji',
                     'Segoe UI Symbol',
                     'Noto Color Emoji'
                 ]
             }
         }
     }
 </script>
 <script data-navigate-once>
     document.addEventListener('livewire:navigated', () => {
         console.log('navigated')
         initFlowbite()
     })
 </script>

 <script src="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/scripts/verify.min.js"></script>
 <link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" rel="stylesheet">