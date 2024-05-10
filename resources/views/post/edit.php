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
        <form action="<?php echo url( 'post/update', $post->id ); ?>" method="post">
            <?php echo csrf_field(); ?>

            <fieldset>
                <legend>
                    Update Post
                </legend>
                <input hidden type="text" name="_method" value="PUT">

                <input type="text" name="title" placeholder="Enter Post Title"
                    value="<?php echo $post->title; ?>"><br><br>
                <textarea name="details" id="" cols="30" rows="10"
                    placeholder="Write post description here.."><?php echo $post->details; ?></textarea>
                <input type="submit" value="Update">
            </fieldset>
        </form>
    </div>
</body>

</html>