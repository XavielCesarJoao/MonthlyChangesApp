<div>
    <div wire:loading>
        <div
            style="position: fixed;
                   display: flex;
                   flex-direction: column;
                   width: 100%;
                   height: 100%;
                   z-index: 1050;
                   left: 0;
                   top: 0;
                   justify-content: center;
                   align-items: center;
                   background: rgba(0,0,0,.35);">

            <div class="card shadow-sm p-4 text-center" style="min-width: 260px;">
                <i class="fas fa-cogs fa-spin fa-2x text-primary mb-3"></i>

                <div class="font-weight-bold">
                    Preocessando . . . 
                </div>

                <small class="text-muted">
                    Por favor aguarde…
                </small>

                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-100"></div>
                </div>
            </div>
        </div>
    </div>
</div>