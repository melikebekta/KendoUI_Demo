@extends('layouts.master')
@section('content')
    <div class="flex-1 overflow-auto">
        <div class="md:p-8 p-4 md:mt-0 mt-14">
            <h1 class="text-2xl font-bold mb-6">Kullanıcı Listeleme</h1>
            <!-- Kullanıcı Listesi Tablosu -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold mb-4">Kullanıcı Listesi</h2>
                <div id="users-grid"></div>
            </div>
        </div>
    </div>
    </div>
    <script src={{ asset('assets/js/common.js') }}></script>
    <script src={{ asset('assets/js/user-add.js') }}></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            var usersData = {!! json_encode($users->map(function ($user) {
        return [
            'id' => $user->id,
            'firstName' => $user->first_name ?? '',
            'lastName' => $user->last_name ?? '',
            'email' => $user->email,
            'role' => $user->role ?? 'Kullanıcı',
            'createdAt' => \Carbon\Carbon::parse($user->created_at)->format('d.m.Y'),
        ];
    })) !!};

            // Kendo UI Grid oluşturma
            $("#users-grid").kendoGrid({
                dataSource: {
                    data: usersData,
                    schema: {
                        model: {
                            id: "id",
                            fields: {
                                id: { type: "number" },
                                firstName: { type: "string" },
                                lastName: { type: "string" },
                                email: { type: "string" },
                                role: { type: "string" },
                                createdAt: { type: "string" }
                            }
                        }
                    },
                    pageSize: 5
                },
                height: 550,
                scrollable: true,
                sortable: true,
                filterable: true,
                pageable: {
                    refresh: true,
                    pageSizes: [5, 10, 20, "Tümü"],
                    buttonCount: 5
                },
                columns: [
                    { field: "id", title: "ID", width: "50px" },
                    { field: "firstName", title: "Ad", width: "120px" },
                    { field: "lastName", title: "Soyad", width: "120px" },
                    { field: "email", title: "E-posta", width: "200px" },
                    { field: "role", title: "Rol", width: "100px" },
                    { field: "createdAt", title: "Kayıt Tarihi", width: "120px" },
                    {
                        title: "İşlemler",
                        width: "120px",
                        template: "<button class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-primary edit-button' title='Düzenle'><span class='k-icon k-i-edit'></span></button> <button class='k-button k-button-md k-rounded-md k-button-solid k-button-solid-error delete-button' title='Sil'><span class='k-icon k-i-delete'></span></button>"
                    }
                ]
            });

            $(document).on("click", ".edit-button", function (e) {
                e.preventDefault();

                var grid = $("#users-grid").data("kendoGrid");
                var row = $(this).closest("tr");
                var dataItem = grid.dataItem(row);
                var editUrl = "{{ route('users.edit', ':id') }}"; 
                editUrl = editUrl.replace(':id', dataItem.id);

                window.location.href = editUrl;
            });



            $(document).on("click", ".delete-button", function (e) {
                e.preventDefault();

                var grid = $("#users-grid").data("kendoGrid");
                var row = $(this).closest("tr");
                var dataItem = grid.dataItem(row);

                Swal.fire({
                    title: "Emin misiniz?",
                    text: "Bu kullanıcı silinecek!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Evet, sil!",
                    cancelButtonText: "İptal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('users.remove') }}",
                            type: "POST",
                            data: {
                                _token: "{{ csrf_token() }}",
                                id: dataItem.id
                            },
                            success: function (response) {
                                if (response.status === 'success') {
                                    grid.removeRow(row); 
                                    Swal.fire(
                                        'Silindi!',
                                        response.message,
                                        'success'
                                    )
                                }
                            },
                            error: function () {
                                Swal.fire(
                                    'Hata!',
                                    'Kullanıcı silinirken bir sorun oluştu.',
                                    'error'
                                )
                            }
                        });
                    }
                });
            });



        });
    </script>


@endsection