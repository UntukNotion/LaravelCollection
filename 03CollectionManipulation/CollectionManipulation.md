# Collection Manipulation

Collection adalah sebuah class, oleh karena itu untuk memanipulasi data nya, kita perlu menggunakan method yang terdapat di Collection

## Collection Operations

| Method | Keterangan |
| --- | --- |
| push(data) | Menambah data ke paling belakang |
| pop() | Menghapus dan mengambil data paling terakhir |
| prepend(data) | Menambah data ke paling depan |
| pull(key) | Menghapus dan mengambil data sesuai dengan key |
| put(key, data) | Mengubah data dengan key |

## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-    /**
-     * @test
-     */
-    public function forEach(): void
-    {
-        $toCollection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
-        
-        foreach ($toCollection as $key => $value) {
-            self::assertEquals($key + 1, $value);
-        }
-    }

+     /**
+     * @test
+     */
+    public function collectionManipulation(): void
+    {
+        // membuat collection dari array kosong
+        $collection = collect([]);
+
+        // menambah data menggunakan push()
+        $collection->push(1, 2, 3);
+
+        // mengubah collection menjadi array
+        $toArray = $collection->all();
+
+        self::assertEqualsCanonicalizing([1, 2, 3], $toArray);
+
+        // menghapus nilai paling akhir
+        $toArray = $collection->pop();
+
+        self::assertEquals(3, $toArray);
+        self::assertEqualsCanonicalizing([1, 2], $collection->all());
+    }
}
```