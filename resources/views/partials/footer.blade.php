<footer >
  <div class="container">

    <!-- sezione dei links -->
    <section id="footer-links">
      <div class="list-container">
        <div>

          <ul>
            <h5>DC COMICS</h5>
            
            @foreach ($links as $link)
            
            <li >
            <a href="#">
                {{ $link['text'] }} 
            </a> 
          </li>
          @endforeach
        </ul>
        <ul>
          <h5>SHOP</h5>
          
          @foreach ($shops as $shop)
          
          <li >
          <a href="#">
              {{ $shop['text'] }} 
          </a> 
        </li>
        @endforeach
      </div>
      <div>
        <ul>
          <h5>DC </h5>
          
          @foreach ($dcs as $dc)
          
          <li >
          <a href="#">
              {{ $dc['text'] }} 
          </a> 
        </li>
        @endforeach
      </div>
      <div>
        <ul>
          <h5>DC SITES</h5>
          
          @foreach ($sites as $site)
          
          <li >
          <a href="#">
              {{ $site['text'] }} 
          </a> 
        </li>
        @endforeach
      </div>
      
    </div>
  </footer>