            <footer class="py-5 text-center bg-dark text-light">
                <h2 class="comfortaa">Gracias por apoyarme!</h2>
                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </footer>

        </main>
        <script src="<?= base_url('assets/'); ?>js/vendor/jquery.min.js"></script><!-- taked from ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js -->
        <script src="<?= base_url('assets/'); ?>js/bootstrap/bootstrap.bundle.js"></script>
        <script src="<?= base_url('assets/'); ?>js/main.js"></script>
        <script>
            $(document).ready(()=> {
                let _h = $(document).height() - $("#app").height();
                if(_h > 0){
                    $("footer").css("margin-top", _h);
                }
            });
        </script>
    </body>
</html>
