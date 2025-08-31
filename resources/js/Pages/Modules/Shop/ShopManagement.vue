<script setup>
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
import DataTable from '@/Components/Admin/DataTable.vue';
import { Head } from "@inertiajs/vue3";
import { onMounted, ref } from 'vue';


const Shop_table_columns = [
    { field: 'shop_name', title: 'Shop Name', isUnique: true },
    { field: 'shop_address', title: 'Shop Address' },
    { field: 'shop_owner_name', title: 'Shop Owner Name' },
    { field: 'shop_contact_number', title: 'Shop Contact Number' },
    { field: 'shop_email', title: 'Shop Email' },
    { field: 'actions', title: 'Actions', cellRenderer: false, width: '50px' },
];
onMounted(() => {

});
</script>

<template>
    <AdminLayout>
        <Head title="Shop-Management" />
        <!-- Dashboard Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Shop</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a :href="route('dashboard')">Dashboard</a></li>
                            <li class="breadcrumb-item active">Shop Management</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href=""><button class="btn btn-primary mr-2">Export Shop</button></a>
                        <button class="btn btn-primary mr-2">Import Shop</button>
                        <a :href="route('shop.create')"><button class="btn btn-primary mr-2">Create Shop</button></a>
                    </div>
                </div>
                <!-- DataTable Row -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-body" style="padding: 0px;">
                                <DataTable
                                    title="SHOP TABLE"
                                    fetch_url="/admin/shop/data-table"
                                    :columns="Shop_table_columns"
                                    table_icon='<i class="nav-icon fas fa-archive" style="font-size: medium;"></i>'
                                    modal_title="Shop"
                                    edit_route_name = 'shop.edit'
                                    delete_route_name= 'shop.delete'
                                    view_button = false
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AdminLayout>
</template>

<style scoped>
canvas {
    height: 400px !important;
}
</style>
