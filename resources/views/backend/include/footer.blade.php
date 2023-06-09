
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#0189B9", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <script src="{{ asset('public/backend/assets/js/pages/jquery/jquery.min.js') }}"></script>
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{ asset('public/backend/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('public/backend/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('public/backend/assets/js/scripts.bundled1cf.js') }}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="{{ asset('public/backend/assets/plugins/custom/fullcalendar/fullcalendar.bundled1cf.js') }}"></script>
		<!--end::Page Vendors-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{ asset('public/backend/assets/js/pages/widgetsd1cf.js') }}"></script>
        <!--end::Page Scripts-->

        @if (!empty($pluginjs))
			@foreach ($pluginjs as $value)
				<script src="{{ asset('public/backend/assets/js/'.$value) }}" type="text/javascript"></script>
			@endforeach
		@endif

		@if (!empty($js))
		@foreach ($js as $value)
			<script src="{{ asset('public/backend/assets/js/customjs/'.$value) }}" type="text/javascript"></script>
		@endforeach
		@endif
		<script type="text/javascript">
			jQuery(document).ready(function () {
				// alert("Hello");
				$('#loader').show();
				$('#loader').fadeOut(2000);
				// exit;
			});
			</script>

		<script>

			jQuery(document).ready(function () {
				@if (!empty($funinit))
						@foreach ($funinit as $value)
							{{  $value }}
						@endforeach
				@endif
			});
		</script>
