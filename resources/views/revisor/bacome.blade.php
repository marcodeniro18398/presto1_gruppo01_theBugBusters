<x-layout>
    <div class="containeer fluid containerForm pb-5">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-8">
                <form action="">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome!</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address!</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 ">
                        <label for="message" class="form-label"></label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10">Messaggio!</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
