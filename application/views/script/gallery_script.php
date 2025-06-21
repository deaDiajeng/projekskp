<script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            const id = $(this).data('id');
            const event = $(this).data('event');
            const image = $(this).data('image');

            $('#galleryModalLabel').text('Edit Gallery');
            $('#form-gallery').attr('action', '<?= base_url('Gallery/update') ?>');
            $('#id_gallery').val(id);
            $('#event').val(event);
            $('#old_image').val(image);

            // Tampilkan preview gambar lama
            const imageUrl = '<?= base_url('uploads/galeri/') ?>' + image;
            $('#preview-old-image').attr('src', imageUrl).show();
        });

        $('#galleryModal').on('hidden.bs.modal', function() {
            $('#form-gallery')[0].reset();
            $('#form-gallery').attr('action', '<?= base_url('gGllery/save') ?>');
            $('#galleryModalLabel').text('Tambah Gallery');
            $('#id_gallery').val('');
            $('#old_image').val('');
            $('#preview-old-image').attr('src', '').hide();
        });
    });
</script>