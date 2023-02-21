 <div class="layout-wrapper layout-content-navbar">
     <div class="layout-container">
         <x-menu></x-menu>
         <div class="layout-page">
             <x-navbar></x-navbar>
             <div class="content-wrapper">
                 <div class="container-xxl flex-grow-1 container-p-y">
                     {{ $slot }}
                 </div>
                 <x-footer></x-footer>
             </div>
         </div>
     </div>
 </div>
