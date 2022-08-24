<div class="show-guest-book px-2 pt-5">
    <div class="container text-left">
        <div class="row justify-content-md-center">
            <?php
            include("../koneksi.php");
            $result = mysqli_query($kon, "SELECT * FROM guest_mamahpapah ORDER BY id DESC");
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<div class='col-md-12 mb-3'>
                        <div class='media px-3 media-comment'>
                            <img class='rounded-circle mr-3 d-none d-sm-block d-md-block d-lg-block' src=https://na.ui-avatars.com/api/?name=$user_data[nama]&size=50 alt='Image Avatar'>
                            <div class='media-body'>
                                <div class='mb-2'>
                                    <h5 class='h6 mb-0 text-secondary'>" . $user_data['nama'] . "</h5>
                                    <small class='text-muted'>" . $user_data['created_at'] . "</small>
                                </div>

                                <p>" . $user_data['pesan'] . "</p>
                            </div>
                        </div>
                    </div>";
            }
            ?>

        </div>
    </div>
</div>