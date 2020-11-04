<div class="container">
    <div class="row bg-secondary">
        <div class="col-3 m-4 text-center text-no-wrap">
            <img src="<?= base_url().'/assets/img/MrQ.svg' ?>" height="60px" alt=""><br>
            <small>&copy; 2020 neardes.com</small>
        </div>
        <div class="float-right text-light col mt-4">
            <ul style="font-size:16px">
                <li class="border-0">
                    <small>
                        <?php echo 'Site: '.site_url(); ?>
                    </small>
                </li>
                <li class="border-0">
                    <small>
                        <?php echo 'Current URL: '.current_url(); ?>
                    </small>
                </li>
                <li class="border-0">
                    <small>
                        <?php echo 'Base URL: '.base_url(); ?>
                    </small>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
