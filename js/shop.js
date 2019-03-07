function _setAppointmentAgent() {
    $('.shop').on('click', (element) => {
    })
}

//     $.ajax({
//         url: '/appointments_users',
//         data,
//         method: 'POST',
//         dataType: "JSON",
//         headers: {
//             'X-CSRF-Token': gon.csrf_token
//         }
//     }).then((result) => {
//         swal({
//             type: 'success',
//             title: I18n.t('modals.success.title'),
//             showConfirmButton: false,
//             timer: 1500
//         });
//         this.new_appointments.DataTable().draw();
//         this.upcoming_appointments.DataTable().draw();
//         this.past_appointments.DataTable().draw();
//     }).catch((err) => {
//         swal({
//             type: 'error',
//             title: I18n.t('modals.error.title'),
//             text: err.responseJSON.errors.user[0],
//         })
//     });
// })

function catalog() {
    var compiled = _.template('<div class="col-sm-6 col-md-4 col-lg-3">\n' +
        '    <!-- Product item -->\n' +
        '    <div class="product-item hover-img">\n' +
        '        <a href="product_detail.htm" class="product-img">\n' +
        '            <img src="images/sp2.jpg" alt="image">\n' +
        '        </a>\n' +
        '        <div class="product-caption">\n' +
        '            <h4 class="product-name">\n' +
        '                <a href="#"><%= prod.title %></a>\n' +
        '            </h4>\n' +
        '            <div class="product-price-group">\n' +
        '                <span class="product-price"><%= prod.userId %></span>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '        <div class="absolute-caption">\n' +
        '            <a href="#"><i class="fa fa-heart-o"></i></a>\n' +
        '            <a href="#"><i class="fa fa-exchange"></i></a>\n' +
        '            <a href="#"><i class="fa fa-cart-plus"></i></a>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</div>');

    $.ajax({
        type: "GET",
        url: "http://jsonplaceholder.typicode.com/posts",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function(data){
console.log(data);
            _.forEach(data, function(value) {
                $('#catalog').append(compiled({ 'prod': value }));
            });

        },
        failure: function(errMsg) {
            alert(errMsg);
        }
    });
}


