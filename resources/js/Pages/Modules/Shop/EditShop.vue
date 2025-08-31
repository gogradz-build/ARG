<script setup>
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
import { Head } from "@inertiajs/vue3";
import { ref } from 'vue';
import { useToast } from 'vue-toastification'
import { update } from '../../../main';

const formRef = ref(null);
const toast = useToast();
const shop_name = ref('');
const shop_address = ref('');
const shop_owner_name = ref('');
const shop_contact_number = ref('');
const shop_email = ref('');
const shop_id = ref('');

const props = defineProps({
    shop: Object,
});

shop_name.value = props.shop.shop_name;
shop_address.value = props.shop.shop_address;
shop_owner_name.value = props.shop.shop_owner_name;
shop_contact_number.value = props.shop.shop_contact_number;
shop_email.value = props.shop.shop_email;

async function handleSubmit() {
    const form = formRef.value;
    if (form.checkValidity() === false) {
        toast.error("Please fill out all required fields.");
        form.classList.add('was-validated');
        return;
    }

    const formData = new FormData();

    formData.append('id', props.shop.id);
    formData.append('shop_name', shop_name.value);
    formData.append('shop_address', shop_address.value);
    formData.append('shop_owner_name', shop_owner_name.value);
    formData.append('shop_contact_number', shop_contact_number.value);
    formData.append('shop_email', shop_email.value);

    update('shop.update', formData);
}

</script>

<template>
    <AdminLayout>

        <Head title="employee-Management" />

        <!-- Dashboard Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">SHOP EDIT</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a :href="route('shop.index')">Shop</a></li>
                            <li class="breadcrumb-item active">Shop Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <section class="content">
            <div class="container-fluid">
                <!-- DataTable Row -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-body">
                                <h5 class="w-75 mb-3 text-bold">Shop Details</h5>
                                <form class="needs-validation" novalidate @submit.prevent="handleSubmit" ref="formRef">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="shop_name">Shop Name</label>
                                            <input type="text" class="form-control" id="shop_name" required
                                                placeholder="Shop Name" v-model="shop_name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="shop_owner_name">Shop Owner Name</label>
                                            <input type="text" class="form-control" id="shop_owner_name" required
                                                placeholder="Shop Owner Name" v-model="shop_owner_name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_contact_number">Shop Contact Number</label>
                                            <input type="text" class="form-control" id="shop_contact_number" required
                                                placeholder="Shop Contact Number" v-model="shop_contact_number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="shop_email">Shop Email</label>
                                            <input type="email" class="form-control" id="shop_email" required
                                                placeholder="Shop Email" v-model="shop_email">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="shop_address">Shop Address</label>
                                            <textarea class="form-control" id="shop_address" required
                                                placeholder="Shop Address" v-model="shop_address" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Updated</button>
                                        </div>
                                    </div>

                                </form>
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
