<footer class="footer">
    <div class="container-fluid">
        <ul class="nav">
            <li class="nav-item">
                <a href="#" target="blank" class="nav-link">
                    {{ __('Team FlyCash') }}
                </a>
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
            <a href="#" target="_blank">{{ __('Team FlyCash') }}</a> {{ __('for a better web') }}.
        </div>
    </div>

    <!-- ============================================================================================ -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="agentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div> -->
</footer>
