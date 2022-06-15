CREATE TABLE `buku` (
  `no` int(255) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `jenis_buku` varchar(10) NOT NULL,
  `no_isbn` int(13) NOT NULL
) 
ALTER TABLE `buku`
  ADD PRIMARY KEY (`no`);
