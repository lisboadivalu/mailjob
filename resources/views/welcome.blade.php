<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="w-full">
        @if (session()->has('success'))
            <div class="text-center">
                <p>
                    {{ session()->get('success') }}
                </p>
            </div>
        @endif
        <form action="{{ route('sendEmail')}}" method="post" class="grid p-5 w-2/3 mx-auto h-4/3">
            @csrf
            @method('POST')
            <div class="text-blue-800">
                <div class="text-center text-2xl font-bold">
                    <h1>Send an Email</h1>
                </div>
                <div class="grid my-1">
                    <label for="email" class="font-bold">Email</label>
                    <input 
                        class="form-input rounded"
                        type="email" 
                        name="email" 
                        id="email"
                        placeholder="exemple@exemple.com"
                    >

                    @error('email')
                        <p>
                            {{$message}}
                        </p> 
                    @enderror
                    
                </div>
                <div class="grid my-1">
                    <label for="subject" class="font-bold">Subject Title</label>
                    <input 
                        class="form-input rounded"
                        type="text" 
                        name="subject" 
                        id="subject"
                        placeholder="Title"
                    >
                    <div>
                        @error('subject')
                            <p>
                                {{$message}}
                            </p> 
                        @enderror
                    </div>
                </div>
                <div class="grid my-1">
                    <label for="text" class="font-bold">Subject Text</label>
                    <textarea 
                        class="form-textarea resize-none rounded"
                        name="subject_text" 
                        id="text" 
                        cols="30" 
                        rows="10">
                    </textarea>
                    <div>
                        @error('subject_text')
                            <p>
                                {{$message}}
                            </p> 
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" 
                    class="px-4 py-2 my-5 
                        bg-blue-900 
                        hover:bg-blue-700 
                        text-gray-100
                        font-bold
                        rounded
                        ">
                        Send Email
                    </button>
                </div>
            </div>
        </form>    
    </div>

</body>
</html>