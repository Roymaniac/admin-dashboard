<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="https://admindashboard.com" target="blank" class="nav-link">
                    {{ __('Admin Dasboard') }}
                </a>
            </li>

            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ __('About Us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    {{ __('Blog') }}
                </a>
            </li>
        </ul>
        <div class="copyright">
            &copy; {{ now()->year }} {{ __('made with') }} <i class="tim-icons icon-heart-2"></i> {{ __('by') }}
            <a href="https://twitter.com/awele_roy" target="_blank">{{ __('Dev roy') }}</a> &amp;
            <a href="https://github.com/Roymaniac" target="_blank">{{ __('Roymaniac') }}</a> {{ __('for a better web')
            }}.
        </div>
    </div>
</footer>