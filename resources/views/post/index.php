<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 align="middle">All Post List</h1>
    <table border="1px" width="100%" style="border: groove;">
        <thead>
            <th>S/N</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $count = 0;foreach ( $posts as $post ) {$count++;?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $post->title; ?></td>
                <td><?php echo $post->details; ?></td>
                <td>
                    <a href="<?php echo url( 'post/show', $post->id ); ?>">Show</a>
                    <a href="<?php echo url( 'post/edit', $post->id ); ?>">Edit</a>
                    <form action="<?php echo url( 'post/delete', $post->id ) ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input hidden type="text" name="_method" value="delete">

                        <button>Delete</button>
                    </form>

                </td>
            </tr>
            <?php }?>
        </tbody>

    </table>
    <a href="<?php echo route( 'post.create' ); ?>">Add Post</a>
</body>

</html>