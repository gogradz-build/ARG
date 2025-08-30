
<script setup>
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
import { Head } from "@inertiajs/vue3";
import { ref } from 'vue';
import { useToast } from 'vue-toastification'
import { store } from '../../../main';

const toast = useToast();
const employee_first_name = ref('');
const employee_last_name = ref('');
const employee_nic = ref('');
const employee_contact_number = ref('');
const employee_address = ref('');
const employee_email = ref('');
const formRef = ref(null);

employee_first_name.value = 'Kamal';
employee_last_name .value = 'Perera';
employee_nic.value = '901234567V';
employee_contact_number.value = '0771234567';
employee_address.value =  'Colombo 01';
employee_email.value = 'kamal.perera@example.com';


async function handleSubmit() {
    const form = formRef.value;

    if (form.checkValidity() === false) {
        toast.error("Please fill out all required fields.");
        form.classList.add('was-validated');
        return;
    }
    
    const formData = new FormData();
    formData.append('employee_first_name', employee_first_name.value);
    formData.append('employee_last_name', employee_last_name);
    formData.append('employee_nic', employee_nic);
    formData.append('employee_contact_number', employee_contact_number);
    formData.append('employee_address', employee_address);
    formData.append('employee_email', employee_email);

    store('#', formData);
}

</script>

<template>
    <AdminLayout>

        <Head title="Employee-Edit" />

        <!-- Dashboard Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">EMPLOYEE EDIT</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a :href="route('employee.index')">Employee</a></li>
                            <li class="breadcrumb-item active">Employee Edit</li>
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
                                <h5 class="w-75 mb-3 text-bold">Employee Edit</h5>
                                <form class="needs-validation" novalidate @submit.prevent="handleSubmit" ref="formRef">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_first_name">First Name</label>
                                            <input type="text" class="form-control" id="employee_first_name" required
                                                placeholder="First Name" v-model="employee_first_name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_last_name">Last Name</label>
                                            <input type="text" class="form-control" id="employee_last_name" required
                                                placeholder="Last Name" v-model="employee_last_name">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_nic">NIC</label>
                                            <input type="text" class="form-control" id="employee_nic_name" required
                                                placeholder="NIC" v-model="employee_nic">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_contact_number">Contact number</label>
                                            <input type="number" class="form-control" id="employee_contact_number" required
                                                placeholder="Contact Number" v-model="employee_contact_number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="employee_contact_number">NIC</label>
                                            <input type="text" class="form-control" id="employee_address" required
                                                placeholder="Address" v-model="employee_address">
                                        </div>
                                         <div class="col-md-6 mb-3">
                                            <label for="employee_email">Email</label>
                                            <input type="email" class="form-control" id="employee_address" required
                                                placeholder="Email address" v-model="employee_email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">UPDATE</button>
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
