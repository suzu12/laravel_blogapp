@csrf
<div class="md-form">
  <label>タイトル</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" class="form-control" required rows="16" placeholder="本文">{{ old('body') }}</textarea>
</div>
