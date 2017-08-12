<script type="text/javascript">
    $(document).on('click', '#delete-btn', function(e){
        e.preventDefault();
        var self = $(this);
        swal({
                    title: "Kamu yakin akan menghapus?",
                    text: "Data tidak akan bisa kembali!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Hapus !",
                    closeOnConfirm: true
                },
                function(isConfirm){
                    if(isConfirm){
                        swal("Terhapus!","Data terhapus", "success");
                        setTimeout(function() {
                            self.parents(".delete").submit();
                        }, 100);
                    }
                    else{
                        swal("Batal","Tidak jadi menghapus", "error");
                    }
                });
    });
</script>