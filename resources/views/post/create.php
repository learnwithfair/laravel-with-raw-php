<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo url( 'post/store' ); ?>" method="post">
            <?php echo csrf_field(); ?>

            <fieldset>
                <legend>
                    Create Post
                </legend>
                <input type="text" name="title" placeholder="Enter Post Title"><br><br>
                <textarea name="details" id="" cols="30" rows="10"
                    placeholder="Write post description here.."></textarea>
                <!-- <button>Submit</button> -->
                <input type="submit">
            </fieldset>
        </form>
        <a href="<?php echo route( 'post.index' ); ?>">Display</a>
    </div>
</body>

</html>