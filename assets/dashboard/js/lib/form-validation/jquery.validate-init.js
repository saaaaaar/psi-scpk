
var form_validation = function() {
    var e = function() {
            jQuery(".form-valide").validate({
                ignore: [],
                errorClass: "invalid-feedback animated fadeInDown",
                errorElement: "div",
                errorPlacement: function(e, a) {
                    jQuery(a).parents(".form-group > div").append(e)
                },
                highlight: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
                },
                success: function(e) {
                    jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
                },
                rules: {
                    "val-username": {
                        required: !0
                    },
                    "val-email": {
                        required: !0
                    },
                    "val-password": {
                        required: !0
                    },
                    "val-confirm-password": {
                        required: !0,
                        equalTo: "#val-password"
                    },
                    "val-select2": {
                        required: !0
                    },
                    "val-select2-multiple": {
                        required: !0,
                        minlength: 2
                    },
                    "val-suggestions": {
                        required: !0
                    },
                    "val-skill": {
                        required: !0
                    },
                    "val-currency": {
                        required: !0
                    },
                    "val-website": {
                        required: !0
                    },
                    "val-phoneus": {
                        required: !0
                    },
                    "val-digits": {
                        required: !0
                    },
                    "val-number": {
                        required: !0
                    },
                    "val-range": {
                        required: !0
                    },
                    "val-terms": {
                        required: !0
                    }
                },
                messages: {
                    "val-username": { //Judul
                        required: "Silahkan masukkan judul informasi bencana",
                        minlength: "Judul harus memuat minimal 5 karakter"
                    },
                    "val-email": "Please enter a valid email address",
                    "val-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    "val-confirm-password": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                    "val-select2": "Silahkan pilih salah satu jenis bencana!", //Jenis Bencana
                    "val-select2-multiple": "Please select at least 2 values!",
                    "val-suggestions": "What can we do to become better?",
                    "val-skill": "Silahkan masukkan jumlah korban", //Korban
                    "val-currency": "Please enter a price!",
                    "val-website": "Silahkan masukkan batas pengumpulan bantuan", //Batas waktu
                    "val-phoneus": "Please enter a US phone!",
                    "val-digits": "Silahkan masukkan koordinat lokasi", //Lokasi
                    "val-number": "Silahkan sertakan foto terkait bencana!", //Foto
                    "val-range": "Please enter a number between 1 and 5!",
                    "val-terms": "You must agree to the service terms!"
                }
            })
        }
    return {
        init: function() {
            e(), a(), jQuery(".js-select2").on("change", function() {
                jQuery(this).valid()
            })
        }
    }
}();
jQuery(function() {
    form_validation.init()
});