# Mapping

Mapping adalah transformasi (mengubah bentuk data) menjadi data lain

Mapping membutuhkan function sebagai parameter yang digunakan untuk membentuk data lainnya

Urutan Collection hasil mapping adalah sama dengan urutan collection aslinya

# Mapping Operations

| Method | Keterangan |
| --- | --- |
| map(function) | Iterasi seluruh data, dan mengirim seluruh data ke function |
| mapInto(class) | Iterasi seluruh data, dan membuat object baru untuk class dengan mengirim parameter tiap data |
| mapSpread(function) | Iterasi seluruh data, dan mengirim tiap data sebagai parameter di function |
| mapToGroups(function) | Iterasi seluruh data, dan mengirim tiap data ke function, function harus mengembalikan single key-value array untuk di group sebagai collection baru |