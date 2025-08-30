
<script setup>
import AdminLayout from '@/Layouts/Admin/AdminLayout.vue';
import { Head } from "@inertiajs/vue3";
import { ref } from 'vue';
import { useToast } from 'vue-toastification'
import { store } from '../../../main';

const toast = useToast();
const consumer_id = ref('');
const total_payment_amount = ref(0);
const reference_number = ref('');
const sample_numbers = ref('');
const sample_locations = ref('');
const formRef = ref(null);

consumer_id.value  = 1 ;
total_payment_amount.value = 1500.00;
reference_number.value = "REF1001";
sample_numbers.value = "SMP-001";
sample_locations.value =  "Colombo";

async function handleSubmit() {
    const form = formRef.value;
    if (form.checkValidity() === false) {
        toast.error("Please fill out all required fields.");
        form.classList.add('was-validated');
        return;
    }
    const formData = new FormData();
    
    formData.append('consumer_id', consumer_id.value);
    formData.append('total_payment_amount', total_payment_amount.value);
    formData.append('reference_number', reference_number.value);
    formData.append('sample_numbers', sample_numbers.value);
    formData.append('sample_locations', sample_locations.value);
    

    store('#', formData);
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
                                <h5 class="w-75 mb-3 text-bold">Employee Details</h5>
                                <form class="needs-validation" novalidate @submit.prevent="handleSubmit" ref="formRef">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="consumer_id">First Name</label>
                                            <input type="text" class="form-control" id="consumer_id" required
                                                placeholder="Consumer Id" v-model="consumer_id">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="total_payment_amount">Total Payment Amount</label>
                                            <input type="text" class="form-control" id="total_payment_amount" required
                                                placeholder="Total Payment Amount" v-model="total_payment_amount">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="reference_number">Reference number</label>
                                            <input type="text" class="form-control" id="reference_number" required
                                                placeholder="Reference Number" v-model="reference_number">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="sample_numbers">Sample Numbers</label>
                                            <input type="text" class="form-control" id="sample_numbers" required
                                                placeholder="Sample Numbers" v-model="sample_numbers">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="sample_locations">NIC</label>
                                            <input type="text" class="form-control" id="sample_locations" required
                                                placeholder="Sample Locations" v-model="sample_locations">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Update</button>
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
