 <x-modal action="{{route('register')}}" triggerButtonclass="btn btn-success">
     <x-error class="alert alert-danger " />

     <x-slot:triggerButton>Create New Account</x-slot:triggerButton>

     <x-slot:title>
         Register
     </x-slot:title>
     <div class="d-flex flex-column gap-3 justify-content-center">
         <div class="d-flex justify-content-center gap-3">
             <input type="text" name="" id="" placeholder="First Name" class="d-inline-flex flex-fill focus-ring py-1 px-2 text-decoration-none border rounded-2">
             <input type="text" name="" id="" placeholder="Last Name" class="d-inline-flex flex-fill focus-ring py-1 px-2 text-decoration-none border rounded-2"">
         </div>

         <div>
             <input type=" text" name="" id="" placeholder="Username" class="d-inline-flex w-100 focus-ring py-1 px-2 text-decoration-none border rounded-2">
         </div>

         <div>
             <input type=" text" name="" id="" placeholder="Email" class="d-inline-flex w-100 focus-ring py-1 px-2 text-decoration-none border rounded-2">
         </div>

         <div>
             <input type=" text" name="" id="" placeholder="Password" class="d-inline-flex w-100 focus-ring py-1 px-2 text-decoration-none border rounded-2">
         </div>

     </div>
     <x-slot:footer>
         <button type="submit" class="btn btn-primary">Sign up</button>
     </x-slot:footer>
 </x-modal>