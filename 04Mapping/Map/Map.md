## CollectionTest.php
```diff
class CollectionTest extends TestCase
{
-     /**
-     * @test
-     */
-    public function collectionManipulation(): void
-    {
-        // membuat collection dari array kosong
-        $collection = collect([]);
-
-        // menambah data menggunakan push()
-        $collection->push(1, 2, 3);
-
-        // mengubah collection menjadi array
-        $toArray = $collection->all();
-
-        self::assertEqualsCanonicalizing([1, 2, 3], $toArray);
-
-        // menghapus nilai paling akhir
-        $toArray = $collection->pop();
-
-        self::assertEquals(3, $toArray);
-        self::assertEqualsCanonicalizing([1, 2], $collection->all());
-    }

+    /**
+     * @test
+     */
+    public function mapping(): void
+    {
+        $collection = collect([1, 2, 3]);
+
+        $result = $collection->map(function ($items) {
+            return $items * 2;
+        });
+
+        self::assertEquals([2, 4, 6], $result->all());
+    }
}
```