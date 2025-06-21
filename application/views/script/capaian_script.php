<script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            const id = $(this).data('id');
            const name = $(this).data('name');
            const achievement = $(this).data('achievement');
            const image = $(this).data('image');

            $('#capaianModalLabel').text('Edit Capaian');
            $('#form-capaian').attr('action', '<?= base_url('capaian/update') ?>');
            $('#id_achievement').val(id);
            $('#name').val(name);
            $('#achievement').val(achievement);
            $('#old_image').val(image);

            // Tampilkan preview gambar lama
            const imageUrl = '<?= base_url('uploads/capaian/') ?>' + image;
            $('#preview-old-image').attr('src', imageUrl).show();
        });

        $('#capaianModal').on('hidden.bs.modal', function() {
            $('#form-capaian')[0].reset();
            $('#form-capaian').attr('action', '<?= base_url('capaian/save') ?>');
            $('#capaianModalLabel').text('Tambah Capaian');
            $('#id_achievement').val('');
            $('#old_image').val('');
            $('#preview-old-image').attr('src', '').hide();
        });
    });

    $(document).ready(function() {
        // Reset modal saat dibuka
        $('#capaianModal').on('show.bs.modal', function(e) {
            const button = $(e.relatedTarget);
            const id = button.data('id');

            const form = $('#form-capaian');
            if (id) {
                // MODE EDIT
                $('#capaianModalLabel').text('Edit Capaian');
                form.attr('action', '<?= base_url('Capaian/update') ?>');

                $('#id_achievement').val(id);
                $('#name').val(button.data('name'));
                $('#achievement').val(button.data('achievement'));
                $('#old_image').val(button.data('image'));

                // Tampilkan preview gambar lama
                $('#preview-old-image').attr('src', '<?= base_url('uploads/capaian/') ?>' + button.data('image')).show();
            } else {
                // MODE TAMBAH
                $('#capaianModalLabel').text('Tambah Capaian');
                form.attr('action', '<?= base_url('Capaian/save') ?>');
                form.trigger('reset');
                $('#preview-old-image').hide();
            }
        });
    });
    // punya auto slide dan gerak nya halus
    // document.addEventListener('DOMContentLoaded', function () {
    //     new Splide('#capaianSplide', {
    //         type   : 'loop',
    //         drag   : 'free',
    //         focus  : 'center',
    //         perPage: 3,
    //         gap    : '1rem',
    //         autoScroll: {
    //             speed: 1,
    //         },
    //         extensions: { 
    //             AutoScroll: window.splide.extensions.AutoScroll 
    //         },
    //     }).mount();
    // });


</script>