<header>
    <section class="header-zone container">

        <ul>
            <li>
                <span>DC</span>
            </li>
            @foreach ($links as $link)
            
            <li>
                <a href="#">
                    {{ $link['text'] }}
                </a>
            </li>
            @endforeach
        </ul>
    </section>
</header>