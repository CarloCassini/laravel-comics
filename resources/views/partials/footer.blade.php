<footer>
    <!-- sezione dei links -->
    <section id="footer-links">
      <div class="list-Container">
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

  </footer>