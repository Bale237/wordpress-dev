<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')

  <body @php(body_class("custom-cursor-body"))>
    @php(wp_body_open())
    @php(do_action('get_header'))
    @include('partials.header')

    <div id="app">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>

        @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
        @endif
      </div>
    </div>
  <script type='text/javascript' src='http://bedrock.sage/app/themes/sage-vue-tailwind/dist/scripts/jquery-3.5.1.min.js' ></script>
  <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
  @php(wp_footer())
  </body>
</html>
