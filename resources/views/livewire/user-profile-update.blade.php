<div>
    <form class="form-horizontal" method="post" wire:submit="submit">
        @csrf

        @method('PUT')

        <x-ui.errors/>

        <div class="box-body">
            <div class="form-group">
                <label class="col-sm-2 control-label">Name</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="form.name" placeholder="Name"
                           value="{{ old('name', Auth::user()->name) }}"/>

                    @error('name')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>

                <div class="col-sm-10">
                    <input type="email" wire:model="form.email" class="form-control" id="email" placeholder="Email"
                           value="{{ old('email', Auth::user()->email) }}">

                    @error('email')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-success btn-success pull-right" wire:loading.attr="disabled">
                <span wire:loading>
                    <i class="fa fa-spinner"></i>
                </span>
                <span wire:loading.remove>
                    <i class="fa fa-check-circle"></i>
                </span> Save changes
            </button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
