<footer>
    <!-- sezione dei links -->
    <section id="footer-links">
      <div class="list-Container">
        <ul>
          <h5>DC COMICS</h5>
          @foreach ($links as $link)
              
          <li >
            <a href="link.url">
                {{ $link['text'] }} 
            </a> 
        </li>
        @endforeach

          {{-- <h5>SHOP</h5>
          <li v-for="shop in shops">
            <a :href="shop.url">
              {{ shop.text }}
            </a>
          </li>
        </ul>
        <ul>
          <h5>DC</h5>
          <li v-for="dcTerm in dcTerms">
            <a :href="dcTerm.url">
              {{ dcTerm.text }}
            </a>
          </li>
        </ul>
        <ul>
          <h5>SITES</h5>
          <li v-for="site in sites">
            <a :href="site.url">
              {{ site.text }}
            </a>
          </li> --}}
        </ul>

        {{-- <div class="logo-big">
          <img src="../assets/dc-logo-bg.png" alt="" />
        </div>
      </div>
    </section>
    <!-- sezione sign up now -->
    <section id="footer-social">
      <h5>
        ALTRO
        <font-awesome-icon icon="fa-solid fa-user-secret" />
        <font-awesome-icon icon="bolt" />
      </h5>
      <!--  -->
    </section> --}}
  </footer>