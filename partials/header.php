<header>
  <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
  <select @change="changeGenre" v-model="textSearch" name="genre" id="genre">
    <option value="all">all</option>
    <option value="Rock">rock</option>
    <option value="Pop">pop</option>
    <option value="Jazz">jazz</option>
    <option value="Metal">metal</option>
  </select>
</header>