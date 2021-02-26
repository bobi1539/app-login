<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-4 text-gray-800">User List</h1>
   <div class="row">
      <div class="col-lg-8">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col" class="text-center">Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $no = 1;
               foreach ($users as $user) : ?>
                  <tr>
                     <th scope="row"><?= $no++; ?></th>
                     <td><?= $user['username']; ?></td>
                     <td><?= $user['email']; ?></td>
                     <td><?= $user['name'] ?></td>
                     <td class="text-center">
                        <a class="btn btn-primary btn-sm" href="<?= base_url('admin/' . $user['userid']); ?>">Detail</a>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>

</div>
<?= $this->endSection(); ?>