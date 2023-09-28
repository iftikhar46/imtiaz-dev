<!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/tabler-icons.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/fontawesome.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/flag-icons.css')) }}" />
<!-- Core CSS -->
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css' .$configData['rtlSupport'] .'/core.css')) }}" class="{{ $configData['hasCustomizer'] ? 'template-customizer-core-css' : '' }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css' .$configData['rtlSupport'] .'/' .$configData['theme'].'.css')) }}" class="{{ $configData['hasCustomizer'] ? 'template-customizer-theme-css' : '' }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/css/demo.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/node-waves/node-waves.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')) }}" />
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/typeahead-js/typeahead.css')) }}" />

<!-- Vendor Styles -->
@yield('vendor-style')


<!-- Page Styles -->
@yield('page-style')

<style>
  .bg-menu-theme.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
  /*background: linear-gradient(72.47deg, #7a2539 22.16%, rgba(115, 103, 240, 0.7) 76.47%) !important;*/
  box-shadow: 0px 2px 6px 0px rgba(115, 103, 240, 0.48) !important;
  color: #fff !important;
  background-image: linear-gradient(to right, #7a2539 , #7a2539b0) !important;
}

.light-style .menu .app-brand.demo{
  margin-top: 10px !important;
  height: inherit !important;
}

.light-style .menu .app-brand.demo img{
  width: 130px !important;
}

.btn-primary{
  color: #fff !important;
  background-color: #7a2539 !important;
}


.document_no {
  color: #af4961 !important;

}
.document_no:hover {
  color: #7a2539 !important;
}
</style>
