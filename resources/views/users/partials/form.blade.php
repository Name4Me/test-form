<input type="text" class="form-control" name="name" placeholder="Name" value="{{isset($user->id)?$user->name:''}}" required>
<input type="text" class="form-control" name="email" placeholder="E-mail" value="{{isset($user->id)?$user->email:''}}" required>
@include('country_list')
<hr/>
<input class="btn btn-primary" type="submit" value="Save">
<a href="/"  title="Cancel" class="btn btn-secondary pull-right">Cancel</a>