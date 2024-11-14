<div>
    <form class="form-horizontal" method="post" wire:submit="changePassword">
        @csrf

        @method('PUT')

        <x-ui.errors/>

        <div class="box-body">
            <div class="form-group">
                <label for="currentPassword" class="col-sm-3 control-label">Current Password</label>

                <div class="col-sm-9">
                    <input type="password" class="form-control" id="currentPassword" wire:model="form.currentPassword"
                           placeholder="Current Password"/>

                    @error('currentPassword')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">New Password</label>

                <div class="col-sm-9">
                    <input type="password" wire:model="form.password" class="form-control" id="password"
                           placeholder="New Password"/>

                    @error('password')
                    <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="col-sm-3 control-label">New Password</label>

                <div class="col-sm-9">
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                           placeholder="Repeat Password"/>
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
