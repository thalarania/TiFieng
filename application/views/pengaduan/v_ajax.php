<script>
$(function () {
      $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      });
});
</script>

<script>
   $(document).on( "click",".btnhapus", function() {
         var url = $(this).attr("data-url");
         swal({
         title: "Peringatan!",
         text: "Apakah ingin menghapus data ini?",
         icon: "warning",
         buttons: true,
         dangerMode: true,
         
         });
   });
</script>
<script type="text/javascript">
      $(document).on("click",".btnhapus",function(){
         var id =$(this).attr("data-id");
         swal({
            title: "Peringatan!",
            text: "Apakah anda ingin menghapus data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
            .then((willDelete) => {
            if (willDelete) {
               window.location = "<?= base_url() ?>pengaduan/delete/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });

      $(document).on("click",".btnkonfirmasi",function(){
         var id =$(this).attr("data-id");
         swal({
            title: "Peringatan!",
            text: "Apakah anda ingin mengkonfirmasi data ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
            .then((willDelete) => {
            if (willDelete) {
               window.location = "<?= base_url() ?>pengaduan/konfirmasi/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });

      $(document).on("click",".btnselesai",function(){
         var id =$(this).attr("data-id");
         swal({
            title: "Peringatan!",
            text: "Apakah anda ingin mengkonfirmasi selesai pengaduan ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
            .then((willDelete) => {
            if (willDelete) {
               window.location = "<?= base_url() ?>pengaduan/selesai/"+id;
            } else {
               swal("Cancelled", "Batal :)", "error");
            }
         });
      });

      $(document).on("click",".btnlihat",function(){
			var id =$(this).attr("data-id");
			$.ajax({
				url : "<?= base_url() ?>pengaduan/show/"+id,
				type: "GET",
            dataType : "html",
            success: function(data)
				{
               $("#detail").html(data);
					$("#modalshow").modal('show');
				}
			});
    	});
</script>
<script>
      $("#id_type").change(function(){ 
         var id = $(this).val();
         $.ajax({
            type: "post",
            url: "<?= base_url() ?>kategori/getkategori/",
            data: "id="+ id,
            success: function(data){
               $("#id_kategori").html(data);
            }
         });
      });
   </script>
   
   